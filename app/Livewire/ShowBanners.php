<?php

namespace App\Livewire;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class ShowBanners extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners =['addBanner','delete'];

    #[Url(as: 's')]
    public $search = '';
//    protected $queryString = [
//        'search' => ['except' => '', 'as' => 's'],
//    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

//    public function mount()
//    {
//        $this->banners = Banner::get();
//    }

    public function render()
    {
        $banners = Banner::where('name', 'like', '%'.$this->search.'%')->latest()
            ->paginate(2);
//        $this->emit('delete');
        return view('livewire.show-banners', [
            'banners' => $banners
        ]);
    }

    public function addBanner()
    {
        return redirect()->route('admins.banners.create');
    }

    public function delete($id)
    {
        dd($id);
        $banner = Banner::find($id);
        $banner->delete();
    }
}
