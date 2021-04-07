<?php
namespace App\Models;

use http\Env;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{

    public function getNews()
    {
        return [
            [
                'page' => 1,
                'text' => 'The COVID-19 pandemic caused a major shift in workplaces with many working from home,
                but that caused another shift: an increase in harassment and hostility toward women and minorities.'
            ],
            [
                'page' => 2,
                'text' => 'Project Include, a nonprofit that analyzes the tech industry, surveyed 3,000 people on
                how workplaces have changed, and found an increase in harassment and hostility, harmful work expectations, and anxiety.'
            ],
            [
                'page' => 3,
                'text' => 'These harms draw from systemic issues of injustice and inequity, but also from specific outcomes
                of COVID-19, and they affect all workplaces, large and small, in all sectors, around the world," the report said.'
            ],
            [
                'page' => 4,
                'text' => 'Remote work has created its own set of problems and amplified long-standing ones in the workplace
                , the report said, adding that "harassment and hostility are taking new forms since the pandemic." And post-pandemic,
                 remote work may be here to stay. '
            ],
            [
                'page' => 5,
                'text' => 'Those experiencing more harm as work moved online were more often women, nonbinary,
                Asian, Black, Indigenous, Latinx, and/or people over 50 years old, the report found. '
            ],
        ];
    }

    public function countTextSymbols($text)
    {
        return strlen($text);

    }

    public function getPages()
    {

        return count($this->getNews());

    }

    public function extractNewsName($newsname)
    {

        return substr($newsname, 0, env("NEWS_TITLE_SYMBOLS"));
    }
}
