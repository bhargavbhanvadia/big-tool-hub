namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextToSlugController extends Controller
{
    public function index()
    {
        return view('text-to-slug');
    }

    public function convert(Request $request)
    {
        $slug = \Str::slug($request->input('text'));
        return view('text-to-slug', ['slug' => $slug]);
    }
}
