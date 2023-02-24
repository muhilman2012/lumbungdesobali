<?php

namespace App\Http\Livewire\Pages\News;

use App\Models\News;
use Livewire\Component;

class NewsBanner extends Component
{
    public function render()
    {
        $data = News::orderBy('created_at', 'desc')->limit(6)->get();
        $dataSecondary = News::orderBy('created_at', 'asc')->limit(2)->get();
        return view('livewire.pages.news.news-banner', [
            'data' => $data,
            'dataSecondary' => $dataSecondary,
        ]);
    }
}