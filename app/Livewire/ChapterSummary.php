<?php

namespace App\Livewire;

use App\Models\Chapter;
use Livewire\Component;

class ChapterSummary extends Component
{
    public function render()
    {
        $chapterCount = Chapter::count();
        return view('livewire.chapter-summary', [
            'chapterCount' => $chapterCount
        ]);
    }
}
