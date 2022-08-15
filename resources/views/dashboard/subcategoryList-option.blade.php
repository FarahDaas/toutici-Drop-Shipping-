<?php $dash='-- '; ?>
@foreach($subcategories as $subcategory)
    <option value="{{$subcategory->id}}">{{$dash}}{{$subcategory->nom}}</option>
    @if(count($subcategory->subcategory))
        @include('dashboard/subCategoryList-option',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach
