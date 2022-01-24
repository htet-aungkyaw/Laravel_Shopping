<h2>商品入力</h2>
<from action="{{ route('admin.item.add') }}" method="post">
    @csrf

    <div>
        <label for ="">{{_('Item Name') }}</label>
        <input type ="text" name = "name">
    </div>
    <div>
        <label for="">{{_('price')}}</label>
        <input type="text" name="price">
    </div>
    <button>{{_('Upate')}}</button>
<a href="{{ route('admin.item.index') }}">{{_('Back')}}</a>
</from>