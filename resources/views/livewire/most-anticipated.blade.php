<div wire:init="load">
@forelse($mostAnticipated as $game)
    <div class="most-anticipated-container space-y-10 mt-8">
        <div class="game flex">
            <x-game-card-small :game="$game" />
            <div class="ml-4">
                <a href="{{ $game['link'] }}">{{$game['name']}}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{ $game['release_date'] }}
                </div>
            </div>    
        </div> 
    </div> <!-- end most-anticipated -->
@empty
    <div class="spinner my-8"></div>
@endforelse
</div>
