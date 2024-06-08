<?php 
    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function create_post()
    {
        return view('createpost');
    }

    public function community_post(Request $request)
    {
        $post = new Post;

        $post -> title = $request -> title;
        $post -> description = $request -> description;
        $image = $request -> image;

        if($image)
        {
            $imagename = time().'.'.$image -> getClientOriginalExtension();

            $request -> image -> move('postimage', $imagename);

            $post -> image = $imagename;
        }

        $post -> save();

        return redirect()->back()->with('Success', 'Post Created Successfully');
    }
}
?>
