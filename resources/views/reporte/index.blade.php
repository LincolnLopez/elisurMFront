@extends('adminlte::page')

@section('title', 'Pacientes')



@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#pacientes').DataTable({
                "order": [
                    [0, "desc"]
                ],
                responsive: true,
                autoWidth: true,
                pageLength: 5,
                lengthMenu: [
                    [5],
                    [5]
                ],
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json'
                },

            });
        });
    </script>

    <script src="/js/mascara/src/jquery.maskedinput.js" type="text/javascript"></script>

    <script>
        jQuery(function($) {
            $("#telefono").mask("9999-9999");
            $("#DNI_paciente").mask("9999-9999-99999");
        });
    </script>


    <script>
        $(".alert").delay(3000).slideUp(200, function() {
            $(this).alert('close');
        });
    </script>


    <script>
        $(document).ready(function() {
            jQuery.validator.addMethod("phoneUSS", function(DNI_paciente, element) {
                DNI_paciente = DNI_paciente.replace(/\s+/g, "");
                return this.optional(element) || DNI_paciente.length > 13 &&
                    DNI_paciente.match(/^(\d{4})[-]?(\d{4})[-]?(\d{5})$/);
            }, "Porfavor complete el DNI del paciente");

            jQuery.validator.addMethod("phoneUS", function(telefono, element) {
                telefono = telefono.replace(/\s+/g, "");
                return this.optional(element) || telefono.length > 8 &&
                    telefono.match(/^(\d{4})[-]?(\d{4})$/);
            }, "Please specify a valid phone number");

            $('#formpaciente').validate({
                rules: {
                    nombre_paciente: {
                        required: true,
                        minlength: 5
                    },
                    apellido_paciente: {
                        required: true,
                        minlength: 5
                    },
                    DNI_paciente: {
                        required: true,
                        phoneUSS: true
                    },
                    genero: {
                        required: true,
                        minlength: 1
                    },

                    fecha_nacimiento: {
                        required: true,
                        minlength: 1
                    },

                    edad: {
                        required: true,
                        minlength: 1
                    },
                    direccion: {
                        required: true,
                        minlength: 10
                    },
                    telefono: {
                        required: true,
                        phoneUS: true
                    },
                    antecedentes: {
                        required: true,
                        minlength: 10,

                    },
                },
                messages: {
                    nombre_paciente: {
                        required: "Porfavor, los nombres del paciente es requerido",
                        minlength: "Minimo 5 caracteres"
                    },
                    apellido_paciente: {
                        required: "Porfavor, los apellidos del paciente es requerido",
                        minlength: "Minimo 5 caracteres"
                    },
                    DNI_paciente: {
                        required: "Ingrese DNI del paciente"
                    },
                    genero: {
                        required: "Seleccione un genero",

                    },
                    fecha_nacimiento: {
                        required: "Seleccione la fecha de nacimiento",

                    },
                    edad: {
                        required: "",

                    },
                    direccion: {
                        required: "Porfavor, ingrese la dirección del paciente",
                        minlength: "Minimo 10 caracteres"
                    },
                    telefono: {
                        required: "Agregue un número telefónico",
                        phoneUS: "Complete el número telefónico"

                    },

                    antecedentes: {
                        required: "Agregue los antecedentes del paciente",
                        minlength: "Minimo 10 caracteres"

                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');

                }
            });
        });
    </script>


@stop



@section('content')

    <body onpaste="return false">

        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3> <i class="fas fa-hospital-user">
                            </i> Ingreso de pacientes</h3>
                    </div>
                    {{-- inicio del formulario de actualizar de pacientes --}}

                    <div class="card-body">

                        *Campos obligatorios
                        <form id="formpaciente">


                            <div class="row">

                                <x-adminlte-input name="nombre_paciente" style="text-transform: uppercase;"
                                    id="nombre_paciente" onkeyup="DobleEspacio(this, event);"
                                    onkeypress="return sololetras(event)" label="*Nombres" placeholder="Ingrese"
                                    type="text" fgroup-class="col-md-6" disable-feedback />


                                {{-- With label, invalid feedback disabled and form group class --}}

                                <x-adminlte-input name="apellido_paciente" style="text-transform: uppercase;"
                                    id="apellido_paciente" onkeyup="DobleEspacio(this, event);"
                                    onkeypress="return sololetras(event)" label="*Apellidos" placeholder="Ingrese"
                                    type="text" fgroup-class="col-md-6" disable-feedback />


                                {{-- With label, invalid feedback disabled and form group class --}}

                                <x-adminlte-input name="DNI_paciente" id="DNI_paciente" placeholder="0000-0000-00000"
                                    onkeyup="DobleEspacio(this, event);" label="*DNI" type="text"
                                    fgroup-class="col-md-6" disable-feedback />


                                {{-- With label, invalid feedback disabled and form group class --}}


                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <x-adminlte-select name="genero" id="genero" label="*Género">
                                    <x-adminlte-options :options="['Seleccione', 'Masculino', 'Femenino']" disabled="0" selected="0" />
                                </x-adminlte-select>




                                {{-- With label, invalid feedback disabled and form group class --}}

                                <x-adminlte-input name="fecha_nacimiento" id="fecha_nacimiento" label="*Fecha de nacimiento"
                                    type="date" min="1922-01-01" max="{{ date('Y-m-d') }}" onchange="getEdad();"
                                    fgroup-class="col-md-6" disable-feedback />



                                &nbsp;&nbsp;&nbsp;&nbsp;
                                {{-- With append slot, number type and sm size --}}
                                <x-adminlte-input name="edad" id="edad" label="*Edad" widht="25px"
                                    placeholder="Ingrese" type="text" readonly igroup-size="sm" min=1 max=99>

                                </x-adminlte-input>




                                {{-- With label, invalid feedback disabled and form group class --}}

                                <x-adminlte-input name="telefono" id="telefono" onkeyup="DobleEspacio(this, event);"
                                    onkeypress="return solonumeros(event)" placeholder="0000-0000" label="*Teléfono"
                                    type="tel" fgroup-class="col-md-6" disable-feedback />



                                {{-- With label, invalid feedback disabled and form group class --}}

                            </div>

                            <div class="form-group">
                                <label class="form-label">Dirección:</label>
                                <textarea name="direccion" rows="3" maxlength="125" class="form-control" id="direccion"
                                    onkeypress="return letrasynumeros(event)" onkeyup="DobleEspacio(this, event);" placeholder="Ingrese""></textarea>

                            </div>

                            <div class="form-group">
                                <label class="form-label">*Antecedentes:</label>
                                <textarea name="antecedentes" rows="3" maxlength="300" class="form-control" id="antecedentes"
                                    onkeypress="return letrasynumeros(event)" onkeyup="DobleEspacio(this, event);" placeholder="Ingrese""></textarea>

                            </div>

                            <br>
                            {{-- boton del formulario --}}

                            <div class="col-sm-12" style="text-align: center;">
                                <button type="submit" title="Guardar" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z">
                                        </path>
                                    </svg>
                                    Guardar</button>

                            </div>
                    </div>

                </div>
                </form>


            </div>
            </a>
            </li>

            <br>




        </div>
        </div>
        </div>

        </tbody>






    @stop
