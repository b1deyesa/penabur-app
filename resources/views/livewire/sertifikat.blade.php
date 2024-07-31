<form>
    
    @switch($step)
        @case(1)
            <div class="content">
                <h1>Buat Sertifikat</h1>
                <label>
                    Diberikan Kepada : 
                    <input type="text" name="diberikan_kepada">
                </label>
                <div class="row">
                    <label>
                        Waktu Mulai Kursus :
                        <div class="date">
                            <select wire:model.live="startYear">
                                @foreach ($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                            <select wire:model.live="startMonth">
                                @foreach ($months as $month)
                                    <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                                @endforeach
                            </select>
                            <select wire:model.live="startDay">
                                @foreach ($startDaysInMonth as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                        </div>
                    </label>
                    <label>
                        Waktu Selesai Kursus :
                        <div class="date">
                            <select wire:model.live="endYear">
                                @foreach ($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                            <select wire:model.live="endMonth">
                                @foreach ($months as $month)
                                    <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                                @endforeach
                            </select>
                            <select wire:model.live="endDay">
                                @foreach ($endDaysInMonth as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>                        
                        </div>
                    </label>
                </div>
                <label>
                    Foto 3x4 :
                    <div class="foto">
                        <img src="{{ $previewFoto }}" hidden/>
                        @if ($foto)
                        @else
                            <label for="foto">Choose File</label>
                        @endif
                    </div>
                </label>
                <input type="file" wire:model.live="foto" id="foto" style="display: none">
            </div>
            @break
        @case(2)
            
            @break
    @endswitch
    
    <div class="button">
        <button type="button" wire:click="previous()">Sebelumnya</button>
        <div class="end">
            <button type="button" wire:click="next()">Selanjutnya</button>    
            <button type="button" wire:click="print()">Print</button>    
            <button type="button" wire:click="submit()">Selesai</button>    
        </div>
    </div>
</form>