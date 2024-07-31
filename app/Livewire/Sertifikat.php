<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Sertifikat extends Component
{
    use WithFileUploads;
    
    public $step = 1;
    
    public $foto;
    public $previewFoto;
    
    public $startYear;
    public $startMonth;
    public $startDay;
    public $endYear;
    public $endMonth;
    public $endDay;

    public $startDaysInMonth = [];
    public $endDaysInMonth = [];

    public function mount()
    {
        $this->startYear = date('Y');
        $this->startMonth = date('n');
        $this->startDay = date('d');
        $this->endYear = date('Y');
        $this->endMonth = date('n');
        $this->endDay = date('d');

        $this->updateStartDays();
        $this->updateEndDays();
    }

    public function updatedFoto()
    {
        $this->validate([
            'foto' => 'image',
        ]);

        $this->previewFoto = $this->foto->temporaryUrl();
    }
    
    public function updatedStartYear()
    {
        $this->updateStartDays();
    }

    public function updatedStartMonth()
    {
        $this->updateStartDays();
    }

    public function updatedEndYear()
    {
        $this->updateEndDays();
    }

    public function updatedEndMonth()
    {
        $this->updateEndDays();
    }

    public function updateStartDays()
    {
        $this->startDaysInMonth = range(1, cal_days_in_month(CAL_GREGORIAN, $this->startMonth, $this->startYear));
    }

    public function updateEndDays()
    {
        $this->endDaysInMonth = range(1, cal_days_in_month(CAL_GREGORIAN, $this->endMonth, $this->endYear));
    }
    
    public function previous()
    {
        $this->step--;
    }
    
    public function next()
    {
        $this->step++;
    }
    
    public function print()
    {
        
    }
    
    public function submit()
    {
        
    }
    
    public function render()
    {
        return view('livewire.sertifikat', [
            'years' => range(date('Y'), date('Y') - 10),
            'months' => range(1, 12)
        ]);
    }
}
