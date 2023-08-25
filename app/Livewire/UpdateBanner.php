<?php

namespace App\Livewire;

use App\Livewire\Forms\BannerForm;
use App\Models\Banner;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;

class UpdateBanner extends Component
{
    use WithFileUploads;

    public BannerForm $form;

    public string $name = '';

    public string $link = '';

    public $image = '';

    public function mount($id)
    {
        $banner = Banner::findOrFail($id);
        $this->name = $banner->name;
        $this->link = $banner->link;
        $this->image = $banner->image;
//        $this->form->setBanner($banner);
    }

    public function render()
    {
        return view('livewire.update-banner');
    }

    /**
     * @return void|null
     */
    public function save()
    {
        $this->form->update();
        $to = route('admins.banners.index');
        return $this->redirect($to, navigate: true);
    }
}
