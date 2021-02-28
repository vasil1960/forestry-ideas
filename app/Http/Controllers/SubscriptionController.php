<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subscr = Subscription::find(1);
        return view('subscription.index', [
            'subscr' => $subscr
        ]);
    }

    public function edit($id){
        $subscr = Subscription::find($id);
        return view('subscription.edit', [
            'subscr' => $subscr
        ]);
    }

    public function update(Request $request, $id){

        $request->validate([
            'subscr' => 'required'
        ]);

        $subscr = Subscription::find($id);
        $subscr->content = $request->subscr;

        $subscr->save();

        return redirect()->route('subscription.index')->with(['success' => 'Subscription Update Successfully']);

    }
}
