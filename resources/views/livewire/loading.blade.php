<div>
    <div wire:poll class="text-white text-center">
        @switch(true)
            @case(!$problem->disease)
                <h4>The date is being <span class="theme-gradient"> processed </span> for further review.</h4>
            @break

            @case($problem->disease)
                <h4>The results have <span class="theme-gradient"> successfully </span> appeared.</h4>
            @break
        @endswitch
    </div>
</div>
