@csrf
<label for="name">Name</label>
<input type="text" id="name" name="name" 
        value="{{old('name', $product->name ?? '')}}">

<label for="description">Description</label>
<textarea type="text" id="description" name="description" 
    placeholder="Enter description">
    {{old('description', $product->description ?? '')}}</textarea>

<label for="size">Size</label>
<input type="text" id="size" name="size"   
value="{{old('size', $product->size ?? '') }}">

<button>Save</button>