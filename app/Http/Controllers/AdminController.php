<?php

namespace App\Http\Controllers;

use App\Models\CouncilDesignation;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Testimonial;
use App\Models\Department;
use App\Models\SubDepartment;
use App\Models\Scheme;
use App\Models\Fund;
use App\Models\CouncilMembers;
use App\Models\ScopeCategory;
use App\Models\ScopeImage;
use App\Models\ScopeWork;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\AboutUsCategory;
use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Input;

class AdminController extends Controller
{
    public function dashboard() {   
        return view('admin.dashboard');
    }


    // Gallary------------
    public function gallery()
    {
        $data = GalleryCategory::get();
        return view('admin.gallery', compact('data'));
    }
    public function postGallery(Request $request)
    {
        $gallary_image = $request->file('image');

        for ($i = 0; $i < count($gallary_image); $i++) {
            $partextension[$i] = $gallary_image[$i]->getClientOriginalExtension();
            $partfilename[$i] = $i . time() . '.' . $partextension[$i];
            Gallery::insert([
                'image_path' => $gallary_image[$i]->move('Documents/Gallary/', $partfilename[$i]),
                'gallery_category_id' => $request->type,
            ]);
        }
        return redirect('/admin/gallery')->with('success', 'Successfully Added');
    }


    //Add Misc Documents
    public function documents()
    {
        return view('admin.document');
    }
    public function postDocuments(Request $request)
    {
        $data = new Document();
        $data->document_name = $request->document_name;
        $data->document_path = $request->document_path;
        //  Document upload start code
        $file = $request->file('document_path');
        $extension = $file->getClientOriginalExtension();
        $filename = 'docs' . time() . '.' . $extension;
        $data->document_path = $filename;
        $file->move('Documents/pdf', $filename);
        //  Document upload code close 
        $data->save();
        return redirect('admin/document')->with('success', 'Successfully Uploaded');
    }


    // Departments----------
    public function departments()
    {
        $dept = Department::get();
        return view('admin.departments', compact('dept'));
    }
    public function postDepartments(Request $request)
    {
        $data = new Department();
        $data->department_name = $request->department_name;
        $data->save();
        return redirect('admin/departments')->with('success', 'Department Successfully Added');
    }

    //Sub Departments Add by Choosing Departments
    public function postSubDepartments(Request $request)
    {
        $data = new SubDepartment();
        $data->department_id = $request->department_name;
        $data->sub_department_name = $request->sub_department_name;
        $data->save();
        return redirect('admin/departments')->with('success', 'Sub Department Successfully Added');
    }
    //view and edit department and subdepartment by admin
    public function manageDepartment()
    {
        $departments = Department::latest()->paginate(5);
        return view('admin.manage-department',compact('departments'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //Add schemes & Programes by Admin
    public function manageSchemes()
    {
        return view('admin.dept-schemes');
    }
    public function postSchemes(Request $request)
    {
        $data = new Scheme();
        $data->scheme_title = $request->scheme_title;
        $data->scheme_details = $request->scheme_details;
        $data->save();
        return redirect('admin/schemes')->with('success', 'Schemes Successfully Added');
    }

    //Add Funds by Admin
    public function manageFunds()
    {
        return view('admin.dept-funds');
    }
    public function postFunds(Request $request)
    {
        $data = new Fund();
        $data->funding_year = $request->funding_year;
        $data->funding_amount = $request->funding_amount;
        $data->funding_remarks = $request->funding_remarks;
        $data->save();
        return redirect('admin/funds')->with('success', 'Funds Successfully Added');
    }

    // Event----------
    public function event()
    {
        $data = EventCategory::get();
        return view('admin.eventstyle', compact('data'));
    }
    public function postEvent(Request $request)
    {
        $gallary_image = $request->file('image');
        for ($i = 0; $i < count($gallary_image); $i++) {
            $partextension[$i] = $gallary_image[$i]->getClientOriginalExtension();
            $partfilename[$i] = $i . time() . '.' . $partextension[$i];
            Event::insert([
                'event_path' => $gallary_image[$i]->move('Documents/Gallary/', $partfilename[$i]),
                'event_category_id' => $request->event_category_id,
                'event_title' => $request->event_title,
                'event_description' => $request->event_description,
            ]);
        }
        return redirect('/admin/event')->with('success', 'Successfully Added');
    }

    // Council---------
    public function council()
    {
        $council = CouncilDesignation::get();
        return view('admin.council', compact('council'));
    }
    public function postCouncil(Request $request)
    {
        $data = new CouncilDesignation();
        $data->designation_name = $request->designation_name;
        $data->save();
        return redirect('admin/council')->with('success', 'Council Designation Added');
    }

    //Council Members Add by Choosing Council Designation
    public function postCouncilMember(Request $request)
    {
        $data = new CouncilMembers();
        $data->council_designation_id = $request->designation_name;
        $data->council_member_name = $request->council_member_name;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->address = $request->address;

        $data->save();
        return redirect('admin/council')->with('success', 'Member Successfully Added');
    }

    // Scope--------
    public function scope()
    {
        $scope = ScopeCategory::get();
        return view('admin.scope', compact('scope'));
    }
    public function postScopeImages(Request $request)
    {
        $scope_image = $request->file('image');

        for ($i = 0; $i < count($scope_image); $i++) {
            $partextension[$i] = $scope_image[$i]->getClientOriginalExtension();
            $partfilename[$i] = $i . time() . '.' . $partextension[$i];
            ScopeImage::insert([
                'scope_image' => $scope_image[$i]->move('Documents/Scope_Images/', $partfilename[$i]),
                'scope_category_id' => $request->category_name,
            ]);
        }
        return redirect('admin/scope')->with('success', 'Scope Image Added');
    }
    public function postScope(Request $request)
    {
        $data = new ScopeCategory();
        $data->category_name = $request->category_name;

        $data->save();
        return redirect('admin/scope')->with('success', 'Scope Category Added');
    }

    //Add Scope Works by Choosing Scope Title
    public function postScopeWork(Request $request)
    {
        $data = new ScopeWork();
        $data->scope_category_id = $request->category_name;
        $data->scope_header = $request->scope_header;
        $data->scope_description = $request->scope_description;

        $data->save();
        return redirect('admin/scope')->with('success', 'Scope Work added');
    }

    // testimonials--------
    public function testimonial()
    {
        return view('admin.testimonials');
    }
    public function posttestimonial(Request $request)
    {
        $data = new Testimonial();
        $data->person_name = $request->person_name;
        $data->role_name = $request->role_name;
        $data->profile_image = $request->profile_image;
        $data->content = $request->content;
        //  Image upload start code
        $file = $request->file('profile_image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'testimonial' . time() . '.' . $extension;
        $data->profile_image = $filename;
        $file->move('Documents/Testimonial_images', $filename);
        //  Image upload code close 

        $data->save();
        return redirect('admin/testimonial')->with('success', 'Successfully Added');
    }

    // About
    public function aboutUsAdmin()
    {
        $about = AboutUsCategory::get();
        return view('admin.about_us', compact('about'));
    }
    public function postAboutCategory(Request $request)
    {
        $data = new AboutUsCategory();
        $data->category_name = $request->category_name;
        $data->about_description = $request->about_description;
        $data->about_path = $request->about_path;

        //  Image upload start code
        $file = $request->file('about_path');
        $extension = $file->getClientOriginalExtension();
        $filename = 'about' . time() . '.' . $extension;
        $data->about_path = $filename;
        $file->move('Documents/About_images', $filename);
        //  Image upload code close 

        $data->save();
        return redirect('admin/about_us')->with('success', 'Successfully Added');
    }
    public function postAboutDetail(Request $request)
    {
        $data = new AboutUs();
        $data->about_us_category_id = $request->category_name;
        $data->about_title = $request->about_title;
        $data->title_description = $request->title_description;

        $data->save();
        return redirect('admin/about_us')->with('success', 'Successfully Added');
    }

    // Contact
    public function contactInfo()
    {
        // $scope = ScopeCategory::get();
        return view('admin.contact-info');
    }
    public function postContactInfo(Request $request)
    {
        $data = new Contact();
        $data->address = $request->address;
        $data->email = $request->email;
        $data->contact_no = $request->contact_no;
        
        $data->save();
        return redirect('admin/contact')->with('success', 'Contact Successfully Added');
    }
}
