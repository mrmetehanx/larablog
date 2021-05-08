@foreach ($subcategories as $subcategory)
<li class="menu-item-has-children">
    <a href="index.html"> <i class="elegant-icon icon_house_alt mr-5"></i> {{ $subcategory->name }}</a>
    <ul class="sub-menu text-muted font-small">
        <li><a href="index.html">Home default</a></li>
    </ul>
</li>
@endforeach
