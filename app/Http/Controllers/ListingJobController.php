<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ListingJob;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingJobController extends Controller
{
    // get all job
    public function index() {
          return view('home',[
          "jobs"=>ListingJob::latest()->filter(request(['tag','search']))->paginate(6)
          ]);
    }

    //  get single job
    public function show(ListingJob $job ) {
            return view('pages.single_job',[
            "job"=>$job
            ]);

        //  old method
        // $job = ListingJob::find($id);
        // if ($job){
            // return view('pages.single_job',[
            // "listing"=>$id
            // ]);
        // }else {
        //   return view('pages.404');
        // }
    }

    // show create page form

    public function create(){
        return view('pages.create_job');
    }

     // Store Listing job Data
     public function store(Request $request) {
     $formFields = $request->validate([
     'title' => 'required',
     'company' => ['required', Rule::unique('listing_jobs', 'company')],
     'location' => 'required',
     'website' => 'required',
     'email' => ['required', 'email'],
     'tags' => 'required',
     'salary' => 'required',
     'vacancy' => 'required',
     'jobNature' => 'required',
     'description' => 'required'
     ],[
        'title.required' => 'العنوان  مطلوب',
        'company.required' => 'الشركة  مطلوب',
        'location.required' => 'الموقع  مطلوب',
        'website.required' => 'اسم الموقع  مطلوب',
        'email.required' => 'الايميل  مطلوب',
        'email.email' => 'ايميل غير صحيح',
        'tags.required' => 'الوسم  مطلوب',
        'salary.required' => 'الراتب  مطلوب',
        'vacancy.required' => 'الوظائف الشاغرة مطلوبة',
        'jobNature.required' => 'طبيعة العمل مطلوبة',
        'description.required' => 'الوصف  مطلوب',

     ]);

     if($request->hasFile('logo')) {
         $formFields['logo'] = $request->file('logo')->store('logos', 'public');
     }

     $formFields['user_id'] = auth()->id();

     ListingJob::create($formFields);

     return redirect('/')->with('message', 'Listing created successfully!');
     }

    //  Show Edit Form
     public function edit(ListingJob $job) {
         return view('pages.edit_job', ['job' => $job]);
     }

     // Update Listing Data
     public function update(Request $request, ListingJob $job) {
     // Make sure logged in user is owner
     if($job->user_id != auth()->id()) {
     abort(403, 'Unauthorized Action');
     }

     $formFields = $request->validate([
     'title' => 'required',
     'company' => ['required'],
     'location' => 'required',
     'website' => 'required',
     'email' => ['required', 'email'],
     'tags' => 'required',
     'salary' => 'required',
     'vacancy' => 'required',
     'jobNature' => 'required',
     'description' => 'required'
     ],[
     'title.required' => 'العنوان مطلوب',
     'company.required' => 'الشركة مطلوب',
     'location.required' => 'الموقع مطلوب',
     'website.required' => 'اسم الموقع مطلوب',
     'email.required' => 'الايميل مطلوب',
     'email.email' => 'ايميل غير صحيح',
     'tags.required' => 'الوسم مطلوب',
     'salary.required' => 'الراتب مطلوب',
     'vacancy.required' => 'الوظائف الشاغرة مطلوبة',
     'jobNature.required' => 'طبيعة العمل مطلوبة',
     'description.required' => 'الوصف مطلوب',

     ]);

     if($request->hasFile('logo')) {
     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
     }

     $job->update($formFields);

     return redirect()->route('job',['job'=>$job->id])->with('message', 'تم تحديث الوظيفة');
     }

     // Delete Listing
     public function destroy(ListingJob $job) {
     // Make sure logged in user is owner
     if($job->user_id != auth()->id()) {
     abort(403, 'Unauthorized Action');
     }

     $job->delete();
     return redirect()->route('manage')->with('message', 'تم مسح الوظيفة بنجاح');
     }

    //  Manage Listings
     public function manage() {
     return view('pages.manage_job', ['jobs' => auth()->user()->listings()->get()]);
     }
}