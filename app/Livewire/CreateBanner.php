<?php

namespace App\Livewire;

use App\Http\Requests\BannerRequest;
use App\Livewire\Forms\BannerForm;
use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBanner extends Component
{
    use WithFileUploads;

//    public BannerForm $form;

    public $name = '';
    public $image = '';
    public $link = '';

    public function render()
    {
        return view('livewire.create-banner');
    }

    protected function rules(): array
    {
        return (new BannerRequest())->rules();
    }

    /**
     * @return void|null
     */
    public function save()
    {
        $data = $this->validate();
        $image = $data['image'];
        $name = 'bao'.time().'.jpg';
        $data['image'] = 'public/banners/'.$name;
        $image->storeAs('public/banners', $name);
        Banner::create($data);
        $to = route('admins.banners.index');
        return $this->redirect($to, navigate: true);
    }
}
