<h1>
    @if(isset($title)) {{$title}} @endif
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('blog.admin.index.index') }}"><i class="fa fa-dashboard"></i> {{$parent}}</a> </li>
    @if(isset($order))
        <li> <a href="">{{$order}}</a></li>
    @endif
    @if(isset($category))
        <li> <a href="">{{$category}}</a></li>
    @endif
    @if(isset($user))
        <li> <a href="">{{$user}}</a></li>
    @endif
    @if(isset($product))
        <li> <a href="">{{$product}}</a></li>
    @endif
    @if(isset($group_filter))
        <li> <a href="">{{$group_filter}}</a></li>
    @endif
    @if(isset($attrs_filter))
        <li> <a href="">{{$attrs_filter}}</a></li>
    @endif
    @if(isset($currency))
        <li> <a href="">{{$currency}}</a></li>
    @endif
    <li> <i class="active"></i>{{$active}}</li>
</ol>
