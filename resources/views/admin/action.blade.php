{{-- ACTIONS SECTION --}}
<div class="d-flex">
    <a href="{{ route('products.show', ['product' => $product->id]) }}"
        class="btn btn-outline-dark btn-sm me-2"><i class="fa fa-server"></i></a>
    <a href=""
        class="btn btn-outline-dark btn-sm me-2"><i class="fa fa-pencil-square"></i></a>
    <div>
        <form
            action="{{ route('products.destroy', ['product' => $product->id]) }}"
            method="POST">
            @csrf
            @method('delete')
            <button type="submit"
                class="btn btn-outline-dark btn-sm me-2"><i
                    class="fa fa-trash"></i></button>
        </form>
    </div>
</div>
{{-- {{ route('employees.show', ['employee' => $employee->id]) }}
{{ route('employees.edit', ['employee' => $employee->id]) }}
{{  --}}
