<?php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdpackageController extends Controller
{
    public function index()
    {
        $travel_packages = package::paginate(10);

        return view('adminpanel.travelingpackages.index', ['travel_packages' => $travel_packages]);
    }
    public function create()
    {
        return view('adminpanel.travelingpackages.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'route' => 'required',
            'media' => 'required',
            'description' => 'required',
            'continent' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);
        $travel_packages = new package();
        $travel_packages->name = $request->name;
        $travel_packages->price = $request->price;
        $travel_packages->duration = $request->duration;
        $travel_packages->route = $request->route;
        $travel_packages->description = strip_tags($request->description);
        $travel_packages->continent = $request->continent;
        $travel_packages->country = $request->country;
        $travel_packages->state = $request->state;
        $travel_packages->city = $request->city;
        $image = $request->file('media');
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Store the file in the 'public' disk and get the path
        $image->storeAs('assets/img', $imageName, 'public');

        // Update the model with the file path
        $travel_packages->media = $imageName;
        $travel_packages->save();
        return redirect()->route('adpackage')->with('success', 'Travel Package Created Successfully');
    }
    public function edit($id)
    {

        $travel_package = package::find($id);

        return view('adminpanel.travelingpackages.edit', ['travel_package' => $travel_package]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'route' => 'required',
            'description' => 'required',
            'continent' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        // Find the travel package by its ID
        $travel_package = Package::find($id);

        // Check if the travel package exists
        if (!$travel_package) {
            return redirect()->route('adpackage')->with('error', 'Travel Package not found');
        }

        // Update the travel package with the edited data
        $travel_package->update([
            'name' => $request->name,
            'price' => $request->price,
            'duration' => $request->duration,
            'route' => $request->route,
            'description' => strip_tags($request->description),
            'continent' => $request->continent,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
        ]);

        // Handle media file update
        if ($request->hasFile('new_media')) {
            // Delete the old media file if needed
            if ($travel_package->media) {
                Storage::disk('public')->delete($travel_package->media);
            }

            // Store the new media file
            $newMediaPath = $request->file('new_media')->storeAs(time() . '_' . $request->file('new_media')->getClientOriginalName());
            $request->file('new_media')->storeAs('assets/img', $newMediaPath, 'public');

            // Update the travel package with the new media path
            $travel_package->update(['media' => $newMediaPath]);
        }


        return redirect()->route('adpackage')->with('success', 'Travel Package Updated Successfully');
    }

    public function destroy($id)
    {
        $travel_package = Package::findOrFail($id);

        // Delete the associated media file from storage if it exists
        if (!empty($travel_package->media)) {
            Storage::disk('public')->delete($travel_package->media);
        }

        // Delete the travel package
        $travel_package->delete();

        return redirect()->route('adpackage')->with('success', 'Travel Package Deleted Successfully');
    }
}
