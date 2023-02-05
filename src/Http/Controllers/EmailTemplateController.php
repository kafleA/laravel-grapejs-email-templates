<?php

namespace Amrit\GrapejsEmailTemplates\Http\Controllers;

use Amrit\GrapejsEmailTemplates\Models\EmailTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function index()
    {
        return EmailTemplate::all();
    }

    public function store(Request $request)
    {
        $emailTemplate = new EmailTemplate();
        $response = emailTemplate::create($request->all());

        return response()->json([
            'code' => 200,
            'error' => false,
            'response' => $response,
        ], 200);
    }

    public function show($id)
    {
        $response = EmailTemplate::find($id);

        return response()->json([
            'code' => 200,
            'error' => false,
            'response' => $response,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $response = EmailTemplate::find($id);
        $response->update($request->all());

        return response()->json([
            'code' => 200,
            'error' => false,
            'response' => $response,
        ], 200);
    }

    public function destroy($id)
    {
        $emailTemplate = EmailTemplate::find($id);
        $emailTemplate->delete();
        $response = 'success';

        return response()->json([
            'code' => 200,
            'error' => false,
            'response' => $response,
        ], 200);
    }
}