<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return Response
 */

    public function __construct()
    {
        $this->middleware(['auth','verified'])->except('index','show');
    }

    public function index()
    {
        $items=Item::OrderBy('id','desc')->Paginate(15);
        return view('item.index')->with(['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        //
        return view('admin.item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name'=>'required',
            'detail'=>'required',
            'price'=>'required',
            'init_qnt'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->title.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/items/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnile/' . $file_name, 15);

            $request->photo->move(public_path('images/items'),$newImageName);

        }

        Item::create([
                'name'=>$request->input('name'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Item::class,'slug',$request->title.$request->_token),
                'photo'=>'/images/items/'.$newImageName,
                'thumb'=>'/images/items/thumbnile/'.$newImageName,
                'tags'=>$request->input('tags'),
                'color'=>$request->input('color'),
                'price'=>$request->input('price'),
                'weight'=>$request->input('weight'),
                'init_qnt'=>$request->input('init_qnt'),
                'badge'=>$request->input('badge'),
                'user_id'=>auth()->user()->id,
                'item_category_id'=>$request->input('item_category_id'),
            ]
        );

        return redirect()->back()->with('message','Item Created Succusfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        $item=Item::where('slug',$slug)->first();

        if($item){
            return view('item.show')->with(['item'=>$item]);
        }else{
            return redirect()->back()->with('error','item not found here');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     * @return Response
     */
    public function edit(Item $item)
    {


        return view('admin.item.edit')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Item $item
     * @return Response
     */
    public function update(Request $request, Item $item)
    {
        return redirect()->route('items.store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back()->with('success','Item removed');
    }
    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->save($path);
    }
}
