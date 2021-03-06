<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use App\Http\Livewire\SearchDropdown;

class SearchDropdownTest extends TestCase
{
    /** @test */
    public function the_search_dropdown_searchs_for_games()
    {
        Http::fake([
            'https://api.igdb.com/v4/games'=>$this->fakeSearchGames()
        ]);

        Livewire::test(SearchDropdown::class)
            ->assertDontSee('zelda')
            ->set('search','zelda')
            ->assertSee('Fake The Legend of Zelda')
            ->assertSee('Fake Zelda II: The Adventure of Link');
    }

    protected function fakeSearchGames()
    {
        return Http::response([
            0 => [
              'id' => 1025,
              'cover' => [
                'id' => 86234,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co1uje.jpg',
              ],
              'first_release_date' => 537580800,
              'name' => 'Fake Zelda II: The Adventure of Link',
              'slug' => 'zelda-ii-the-adventure-of-link',
            ],
            1 => [
              'id' => 1034,
              'cover' => [
                'id' => 100964,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co25wk.jpg',
              ],
              'first_release_date' => 1079568000,
              'name' => 'The Legend of Zelda: Four Swords Adventures',
              'slug' => 'the-legend-of-zelda-four-swords-adventures',
            ],
            2 => [
              'id' => 1029,
              'cover' => [
                'id' => 76691,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co1n6b.jpg',
              ],
              'first_release_date' => 911606400,
              'name' => 'The Legend of Zelda: Ocarina of Time',
              'slug' => 'the-legend-of-zelda-ocarina-of-time',
            ],
            3 => [
              'id' => 2909,
              'cover' => [
                'id' => 77440,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co1nr4.jpg',
              ],
              'first_release_date' => 1385078400,
              'name' => 'The Legend of Zelda: A Link Between Worlds',
              'slug' => 'the-legend-of-zelda-a-link-between-worlds',
            ],
            4 => [
              'id' => 1030,
              'cover' => [
                'id' => 76690,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co1n6a.jpg',
              ],
              'first_release_date' => 956793600,
              'name' => 'The Legend of Zelda: Majora\'s Mask',
              'slug' => 'the-legend-of-zelda-majora-s-mask',
            ],
            5 => [
              'id' => 1027,
              'cover' => [
                'id' => 111338,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co2dwq.jpg',
              ],
              'first_release_date' => 912470400,
              'name' => 'Fake The Legend of Zelda: Link\'s Awakening DX',
              'slug' => 'the-legend-of-zelda-link-s-awakening-dx',
            ],
            6 => [
              'id' => 1022,
              'cover' => [
                'id' => 86202,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co1uii.jpg',
              ],
              'first_release_date' => 509328000,
              'name' => 'The Legend of Zelda',
              'slug' => 'the-legend-of-zelda',
            ],
            7 => [
              'id' => 1041,
              'cover' => [
                'id' => 77450,
                'url' => '//images.igdb.com/igdb/image/upload/t_thumb/co1nre.jpg',
              ],
              'first_release_date' => 983232000,
              'name' => 'The Legend of Zelda: Oracle of Ages',
              'slug' => 'the-legend-of-zelda-oracle-of-ages',
            ],
          ], 200); 
    }
}
