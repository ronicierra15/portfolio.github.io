const checkbox = document.getElementById("bt-ceck");

checkbox.addEventListener("click", function () {
    if (checkbox.checked) {
        window.location.href = "{{ route('clientes.index') }}";
    } else {
        window.location.href = "{{ route('clientes.create') }}";
    }
});
