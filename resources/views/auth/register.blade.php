<x-layout title="Registrazione">
    <x-header title="Registrazione" />

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 border rounded shadow text-white p-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label scritta_verde_scuro">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label scritta_verde_scuro">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-3">
                        <label for="password" class="form-label scritta_verde_scuro">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fa-solid fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- CONFERMA PASSWORD -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label scritta_verde_scuro">Conferma Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                <i class="fa-solid fa-eye" id="eyeIconConfirm"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>