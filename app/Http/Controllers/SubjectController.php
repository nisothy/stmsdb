<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    protected function search(){
        $subjects = SubjectModel::all();
        return view("subject.subject-list",compact('subjects'));
    }


    public function create(Request $request){
        $this->validate($request, [
            'code' => 'required|max:50',
            'name' => 'required|min:2'
        ]);
    
        // SubjectModel::create($request->all());
        $subject = new SubjectModel();
        $subject->code = $request->name;
        $subject->name = $request->code;
        $subject->note = $request->note;
        $subject->active =1 ;
        $subject->save();
    
        return redirect("/subject");
    }
    protected function find($id){
        $subject = SubjectModel::find($id);
        return view("subject.subject-edit",compact("subject"));
    }

    protected function show($id){
        $subject = SubjectModel::find($id);
        return view("subject.student-delete",compact("subject"));
    }

    protected function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required|max:50', // Fixed the placement of the single quote and added max validation
            'name' => 'required|min:2'
        ]);
    
        $subject = SubjectModel::find($id);
        $subject->update($request->all()); // Used lowercase 'update'
    
        return redirect("/subject");
    }

    protected function delete($id){
        $subject = SubjectModel::find($id);
        $subject->active=0;
        $subject->update();
        return redirect("/subject");
    }
    
}
