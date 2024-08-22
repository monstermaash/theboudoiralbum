<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplates;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class EmailTemplatesController extends Controller
{
    //
    public function manageEmails()
    {
        $data['statuses'] = OrderStatus::all();
        $data['templates'] = EmailTemplates::with('for_status')->get();
        return view('admin.manage-emails',$data);
    }
    public function addEmailTemplate(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'status_id' => 'required|integer',
            'subject' => 'required|string',
            'content' => 'required|string',
        ]);

        try{
            DB::beginTransaction();

            $email = new EmailTemplates();
            $email->name = $request->input('name');
            $email->status_id = $request->input('status_id');
            $email->subject = $request->input('subject');
            $email->content = $request->input('content');
            $email->save();
            DB::commit();
            // Prepare response data
            $response = [
                'status' => 200,
                'message' => 'Email template added successfully.',
            ];
        }catch (Exception $e){
            DB::rollBack();
            $response = [
                'status' => 404,
                'message' => 'Something we wrong .'.$e->getMessage(),
            ];
        }

        return response()->json($response);
    }
    public function updateStatus(Request $request){
        $email = EmailTemplates::find($request->id);
        if($email){
            $email->status = isset($request->status) && $request->status == 'true'?1:0;
            $email->save();

            $response = [
                'status' => 200,
                'message' => 'Status updated successfully.',
            ];
        }else{
            $response = [
                'status' => 404,
                'message' => 'Something we wrong .'.$e->getMessage(),
            ];
        }

        return response()->json($response);
    }

    public function deleteEmail($id){
        try {
            $email = EmailTemplates::find($id);

            if (!$email) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Email template not found.'
                ]);
            }

            $email->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Email template deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to delete email template. Error: ' . $e->getMessage()
            ]);
        }
    }
}
