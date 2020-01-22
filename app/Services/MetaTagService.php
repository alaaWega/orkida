<?php

namespace App\Services;
use Illuminate\Http\Response;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\MetaTag;

class MetaTagService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }
    /**
     * List all Setting.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getServiceTags($serviceId)
    {
        return MetaTag::where('service_id', $serviceId)->get();
    }

    /**
     * Datatebles
     * @param client
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($tags)
    {
        $tableData = Datatables::of($tags)
            ->addColumn('actions', function ($data)
            {
                return view('meta_tags.actionBtns')->with('controller','adminpanel/meta_tags')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions'])->make(true);

        return $tableData ;
    }

    /**
     * Create description.
     * @param $type
     * @param $username
     * @param $display_name
     * @param $phone
     * @param $image
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function storeTag($parameters)
    {
        $tags = explode (",", $parameters['tags']);
        foreach ($tags as $tag){
            $metaTag = new MetaTag();
            $metaTag->tag = $tag;
            $metaTag->service_id = $parameters['service_id'];
            $metaTag->save();
        }
        return new Response(['status' => true, 'message'=>'تم التسجيل بنجاح']);
    }

    /**
     * Delete Slider.
     * @param $sliderId
     * @return Slider
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteTag(int $tagId)
    {
        return MetaTag::find($tagId)->delete();
    }
    }
