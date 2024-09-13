<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use Illuminate\Http\Request;

class CardCategoryController extends Controller
{
    public function index()
    {
        return view('card_categories.index', [
            'cardCategories' => CardCategory::all(),
        ]);
    }

    public function show(CardCategory $cardCategory)
    {
        $cardCategory->load('cards');

        return view('card_categories.show', [
            'cardCategory' => $cardCategory,
            'cards' => $cardCategory->cards->push(...$cardCategory->cards)->shuffle(),
        ]);
    }
}
