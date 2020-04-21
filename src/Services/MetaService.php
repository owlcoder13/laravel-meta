<?php

namespace Owlcoder\LaravelMeta\Services;

use App\Helpers\HtmlHelper;
use App\Models\MetaInfo;

class MetaService
{
    public $metas = [];

    public $title;
    public $description;
    public $keywords;

    public function render()
    {
        $out = [];

        if ( ! empty($this->description)) {
            $out[] = HtmlHelper::tag('meta', '', [
                'name' => 'description',
                'content' => $this->description,
            ]);
        }

        if ( ! empty($this->keywords)) {
            $out[] = HtmlHelper::tag('meta', '', [
                'name' => 'keywords',
                'content' => $this->keywords,
            ]);
        }

        foreach ($this->metas as $meta) {
            $out[] = $meta;
        }

        return join("\n", $out);
    }

    public function addMeta($options)
    {
        return HtmlHelper::tag('meta', '', $options);
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function loadFromMeta($name)
    {
        $metaInfo = MetaInfo::whereName($name)->first();

        if ($metaInfo != null) {
            $this->description = $metaInfo->translation->meta_description;
            $this->title = $metaInfo->translation->meta_title;
            $this->keywords = $metaInfo->translation->meta_keywords;
        }
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function renderTitle()
    {
        return $this->title;
    }
}
