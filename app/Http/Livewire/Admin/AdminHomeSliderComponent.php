<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithPagination;

class AdminHomeSliderComponent extends Component
{
    use WithPagination;

    public function deleteSlider($slider_id){
        $slider = HomeSlider::find($slider_id);
        $slider->delete();
        session()->flash('success_message', 'Slider has been deleted successfully!');
    }
    public function render()
    {
        $sliders = HomeSlider::paginate(5);
        return view('livewire.admin.admin-home-slider-component',
        ['sliders'=>$sliders])->layout('layouts.base');
    }
}
