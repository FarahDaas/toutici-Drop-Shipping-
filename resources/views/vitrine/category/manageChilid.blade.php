{{-- <ul>
@foreach($childs as $child)
	<li><li>
	    {{ $child->title }}
	@if(count($child->childs))
            @include('vitrine.category.manageChild',['childs' => $child->childs])
        @endif
	</li></li>
@endforeach
</ul> --}}

{{-- <div class="mega-menu">
    @foreach($childs as $child)
                            <div class="mega-menu__column">
                                <h4>{{ $child->title }}<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                                            @include('vitrine.category.manageChilid',['childs' => $item->childs])

                                    
                                </ul> 
                            </div>
                        @endforeach
                        </div> --}}
<div class="mega-menu">
    @foreach($childs->subcategory as $child)

                                <div class="mega-menu__column">
                                    <h4>{{ $child->title }}<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#">Home Audio &amp; Theathers</a>
                                        </li>
                                        <li><a href="#">TV &amp; Videos</a>
                                        </li>
                                        <li><a href="#">Camera, Photos &amp; Videos</a>
                                        </li>
                                        <li><a href="#">Cellphones &amp; Accessories</a>
                                        </li>
                                        <li><a href="#">Headphones</a>
                                        </li>
                                        <li><a href="#">Videosgames</a>
                                        </li>
                                        <li><a href="#">Wireless Speakers</a>
                                        </li>
                                        <li><a href="#">Office Electronic</a>
                                        </li>
                                    </ul>
                                </div>
                               
    @endforeach
</div>