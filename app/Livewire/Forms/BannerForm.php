<?php

namespace App\Livewire\Forms;

use App\Models\Banner;
use Livewire\Attributes\Rule;
use Livewire\Form;

class BannerForm extends Form
{
    public ?Banner $banner;

    #[Rule('required|min:3')]
    public string $name = '';

    #[Rule('required|min:3')]
    public string $link = '';

    #[Rule('|max:3000')]
    public $image = '';

    public function setBanner(Banner $banner)
    {
        $this->banner = $banner;
        $this->name = $banner->name;
        $this->link = $banner->link;
        $this->image = $banner->image;
    }

    public function store()
    {
        Banner::create($this->validate());
    }

    public function update()
    {
        $this->banner->update(
            $this->validate()
        );
    }
}
