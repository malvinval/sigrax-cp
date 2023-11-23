<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Trait\ContactsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    use ContactsTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        $user = Auth::user();

        return view("dashboard.contacts.index", compact("contacts", "user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view("dashboard.contacts.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "type" => "required|in:EMAIL,WHATSAPP,INSTAGRAM,GITHUB,TWITTER",
            "url" => "required|max:255"
        ]);

        $validatedData["value"] = $this->standarizeContactValue($validatedData["type"], $validatedData["url"]);
        $validatedData["url"] = $this->standarizeContactUrl($validatedData["type"], $validatedData["url"]);

        $validatedData["slug"] = $this->generateContactSlug($validatedData["type"]);

        Contact::create($validatedData);

        return redirect("/dashboard/manage-contacts")->with("success", "New contact created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $contact = Contact::where("slug", $slug)->get();
        $contact = $contact[0];
        $user = Auth::user();

        return view("dashboard.contacts.edit", compact("contact", "user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function standarizeContactUrl($type, $url) {
        if ($type == "WHATSAPP") {
            $prefix = "https://wa.me/";
            return $this->operateContactUrlStandarization($url, $prefix);
        } else if ($type == "EMAIL") {
            $prefix = "mailto:";
            return $this->operateContactUrlStandarization($url, $prefix);
        } else if ($type == "INSTAGRAM") {
            $prefix = "https://www.instagram.com/";
            return $this->operateContactUrlStandarization($url, $prefix);
        } else if ($type == "GITHUB") {
            $prefix = "https://www.github.com/";
            return $this->operateContactUrlStandarization($url, $prefix);
        }  else if ($type == "TWITTER") {
            $prefix = "https://www.twitter.com/";
            return $this->operateContactUrlStandarization($url, $prefix);
        }
    }

    public function standarizeContactValue($type, $url) {
        if($type == "WHATSAPP") {
            $prefix = "https://wa.me/";
            return $this->operateContactValueStandarization($url, $prefix);
        } else if ($type == "EMAIL") {
            $prefix = "mailto:";
            return $this->operateContactValueStandarization($url, $prefix);
        } else if ($type == "INSTAGRAM") {
            $prefix = "https://www.instagram.com/";
            return $this->operateContactValueStandarization($url, $prefix);
        } else if ($type == "GITHUB") {
            $prefix = "https://www.github.com/";
            return $this->operateContactValueStandarization($url, $prefix);
        } else if ($type == "TWITTER") {
            $prefix = "https://www.twitter.com/";
            return $this->operateContactValueStandarization($url, $prefix);
        }
    }

    public function generateContactSlug($type) {
        return strtolower($type);
    }
}
