<?php

namespace Owlcoder\LaravelMeta\Services;

use Owlcoder\Common\Helpers\Html;

class MetaService
{
    public $metas = [];

    public $title;
    public $description;
    public $keywords;

    public function renderHeader()
    {
        $out = [];

        if ( ! empty($this->description)) {
            $out[] = Html::tag('meta', '', [
                'name' => 'description',
                'content' => $this->description,
            ]);
        }

        if ( ! empty($this->keywords)) {
            $out[] = Html::tag('meta', '', [
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
        return Html::tag('meta', '', $options);
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function renderTitle()
    {
        return $this->title;
    }
}
