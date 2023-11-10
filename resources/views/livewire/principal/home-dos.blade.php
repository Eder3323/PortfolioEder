<div>
    <div id="inicio" class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-1">
                <div class="d-flex justify-content-center align-items-center my-3">
                    <img src="{{asset('images/EDER3.jpeg')}}" class="img-thumbnail img-fluid w-100 d-none d-lg-block my_img_thumbnail rounded-4" alt="EDer" style="max-width: 275px;">
                    <img src="{{asset('images/EDER3.jpeg')}}" class="img-thumbnail d-lg-none my_img_thumbnail rounded-3" alt="EDer" style="max-width: 230px;">
                </div>
            </div>
            <div class="col-md-8 ">
                <div class="d-flex justify-content-start align-items-start mt-3">
                    <h1 class="strong"> {{__('Eder Escobedo')}}</h1>
                </div>
                <div class="d-flex justify-content-start align-items-start mb-4">
                    <h3 class="my_text_blue strong"> {{__('Php Full Stack Developer />')}}</h3>
                </div>
                <div class="col-3">
                    <hr class="my_own_hr">
                </div>
                <div class="d-flex justify-content-start align-items-start mt-3 my_font_text">
                    <h4 class="m-0 d-none d-lg-block">{{__('Desarrollador Full-Stack con más de tres años de experiencia, especializado en frameworks PHP como')}}<strong class="my_text_blue"> {{' Laravel '}}</strong> {{__(' y ')}}<strong class="my_text_blue"> {{' CodeIgniter'}}</strong> {{__('. Amplio conocimiento en metodologías ágiles, gestión de proyectos, excelentes habilidades de comunicación y coordinación de equipos.')}}</h4>
                    <h5 class="m-0 d-lg-none">{{__('Desarrollador Full-Stack con más de tres años de experiencia, especializado en frameworks PHP como')}}<strong class="my_text_blue"> {{' Laravel '}}</strong> {{__(' y ')}}<strong class="my_text_blue"> {{' CodeIgniter'}}</strong> {{__('. Amplio conocimiento en metodologías ágiles, gestión de proyectos, excelentes habilidades de comunicación y coordinación de equipos.')}}</h5>
                </div>
                <div class="text-end">
                    <h3 class="my_text_blue d-none d-lg-block">{{__('______________')}}</h3>
                    <h3 class="my_text_blue d-lg-none">{{__('_____')}}</h3>
                </div>
                <div class="d-flex justify-content-start align-items-start mt-3">
                    <a class="p-0 m-0 " target="_blank" href="https://drive.google.com/file/d/17chF6XqrAgs70rcAh9cNSYACQzT3Tckw/view?usp=sharing">
                        <button type="button" class="btn btn-lg my_btn_primary mx-2"> Descargar CV</button>
                    </a>
                    <a href="https://github.com/Eder3323" target="_blank" class="p-0 m-0 mx-2 rounded-3 pe-auto">
                        <img src="{{asset('images/github2.svg')}}" class="img-thumbnail hover_image" height="50px" width="50px" alt="EDer" >
                    </a>
                    <a href="https://www.linkedin.com/in/eder-daniel-escobedo-ortiz-286794180/" target="_blank"  class="p-0 m-0 mx-2 rounded-3 pe-auto">
                        <img src="{{asset('images/LINK.png')}}" class="img-thumbnail hover_image" height="50px" width="50px" alt="EDer" >
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{--    PROYECTOS --}}
    <div id="proyectos" class="container mt-5 ">
        <div class="row pt-3">
            <div class="col-md-4 p-1">
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-start align-content-start">
                    <h1 class="strong"> {{'PROYECTOS'}}</h1>
                </div>
            </div>
            <div class="row mb-4">
                <div id="project 1" class="col-lg-4 col-md-6 col-sm-12 " >
                    <div class="p-2 hover_image_png border border-primary rounded">
                    <div class="row d-flex align-items-center justify-content-center ">
                        <img src="{{asset('images/projects/tutopower3.jpeg')}}" class="rounded my_img_thumbnail rounded-3" alt="TUTO" style="max-width: 430px;">
                    </div>
                    <div class="row py-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <h4><strong class="tuto_color">TutoPower</strong></h4>
                        </div>
                    </div>
                    <div class="row py-1 align-items-center">
                        <h6 class="m-0">{{__('Sistema de gestión de energía eléctrica, administrador de usuarios, medidores, clientes y registros de consumo energético, además de un directorio de contactos.')}}</h6>
                    </div>
                    <div class=" row py-1">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <x-image_comp :text="__('Laravel')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/laravel.png')" ></x-image_comp>
                            <x-image_comp :text="__('Sass')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/sass.png')" ></x-image_comp>
                            <x-image_comp :text="__('Bootstrap')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/bootstrap.png')" ></x-image_comp>
                            <x-image_comp :text="__('Vite')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/vite.png')" ></x-image_comp>
                            <x-image_comp :text="__('Html')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                            <x-image_comp :text="__('MySql')" :width="__('40px')" :height="__('40px')"  :route="__('images/habilidades/mysql.png')" ></x-image_comp>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="proyect_2" class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="p-2 hover_image_png border border-primary rounded">
                        <div class="row d-flex align-items-center">
                            <img src="{{asset('images/projects/xibalba.jpeg')}}" class=" rounded my_img_thumbnail rounded-3" alt="EDer" style="max-width: 480px;">
                        </div>
                        <div class="row text-center py-2">
                            <h4><strong class="text-info">Xibalba Shoes</strong></h4>
                        </div>
                        <div class="row py-1 align-items-center">
                            <h6 class="m-0">{{__('Desarrollo de un e-commerce con Laravel, MySQL, Node.js, Git, Tailwind CSS, montado en servidor Linux, el desarrollo implico la base de datos y su desarrollo Full-Stack.')}}</h6>
                        </div>
                        <div class=" row py-1">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <x-image_comp :class="__('me-1')" :text="__('Laravel')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/laravel.png')" ></x-image_comp>
                                <x-image_comp :text="__('Tailwind')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/tailwind.png')" ></x-image_comp>
                                <x-image_comp :text="__('Html')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                                <x-image_comp :text="__('Alpine Js')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/alpine_js.png')" ></x-image_comp>
                                <x-image_comp :text="__('Sass')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/sass.png')" ></x-image_comp>
                                <x-image_comp :text="__('MySql')" :width="__('40px')" :height="__('40px')"  :route="__('images/habilidades/mysql.png')" ></x-image_comp>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proyect_3" class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="p-2 hover_image_png border border-primary rounded">
                        <div class="row d-flex align-items-center">
                            <img src="{{asset('images/projects/micops.jpeg')}}" class="my_img_thumbnail rounded-3" alt="EDer" style="max-width: 480px;">
                        </div>
                        <div class="row text-center py-2">
                            <h4><strong class="text-primary">Micop's</strong></h4>
                        </div>
                        <div class="row py-1 align-items-center">
                            <h6 class="m-0">{{__('Sistema de contabilidad basado en aplicación web para gestionar recursos administrativos y financieros del departamento de contabilidad.')}}</h6>
                        </div>
                        <div class=" row py-1">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <x-image_comp :class="__('me-1')" :text="__('CodeIgniter')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/codeigniter.png')" ></x-image_comp>
                                <x-image_comp :text="__('Bootstrap')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/bootstrap.png')" ></x-image_comp>
                                <x-image_comp :text="__('JS')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/js.png')" ></x-image_comp>
                                <x-image_comp :text="__('Css')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/css.png')" ></x-image_comp>
                                <x-image_comp :text="__('Html')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                                <x-image_comp :text="__('Oracle')" :width="__('40px')" :height="__('40px')"  :route="__('images/habilidades/oracle.png')" ></x-image_comp>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            here--}}
            <div class="row mb-2">
                <div id="project_4" class="col-lg-4 col-md-6 col-sm-12 " >
                    <div id="div_principal"  class="border border-primary rounded p-2 hover_image_png div_principal">
                        <div id="my_image_div" class="row d-flex align-items-center justify-content-center">
                            <img src="{{asset('images/projects/cuoh.jpeg')}}" class="my_img_thumbnail rounded-3" alt="TUTO" style="max-width: 430px;">
                            <a id="my_button" href="https://github.com/Eder3323/cuoh" target="_blank" class="btn btn-primary position-absolute hidden-button"> Ver Código</a>
                        </div>
                        <div class="row py-2">
                            <div class="d-flex justify-content-center align-items-center">
                                <h4><strong class="cuoh_color">Cuoh</strong></h4>
                            </div>
                        </div>
                        <div class="row py-1 align-items-center">
                            <h6 class="m-0">{{__('Página principal de la universidad CUOH "Centro Universitario del Oriente de Hidalgo", el desarrollo solo fue sólo un prototipo para la universidad el cual no se le dio seguimiento.')}}</h6>
                        </div>
                        <div class=" row py-1">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <x-image_comp :class="__('me-1')" :text="__('Bootstrap')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/bootstrap.png')" ></x-image_comp>
                                <x-image_comp :text="__('Html')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                                <x-image_comp :text="__('Css')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/css.png')" ></x-image_comp>
                                <x-image_comp :class="__('me-1')" :text="__('JavaScript')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/js.png')" ></x-image_comp>
                                <x-image_comp :text="__('jQuery')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/jquery.png')" ></x-image_comp>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="project_5" class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="p-2 hover_image_png border border-primary rounded">
                        <div class="row d-flex align-items-center">
                            <img src="{{asset('images/projects/agenda.jpeg')}}" class="my_img_thumbnail rounded-3" alt="EDer" style="max-width: 480px;">
                        </div>
                        <div class="row text-center py-2">
                            <h4><strong class="text-info">Agenda Digital</strong></h4>
                        </div>
                        <div class="row py-1 align-items-center">
                            <h6 class="m-0">{{__('Desarrollo de una agenda en aplicación web que gestionaba las relaciones con los compradores y vendedores. Permitía el registro de contactos y proporcionaba notificaciones programadas.')}}</h6>
                        </div>
                        <div class=" row py-1">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <x-image_comp :class="__('me-1')" :text="__('Codeigniter')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/codeigniter.png')" ></x-image_comp>
                                <x-image_comp :text="__('Html')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                                <x-image_comp :text="__('Css')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/css.png')" ></x-image_comp>
                                <x-image_comp :class="__('me-1')" :text="__('JavaScript')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/js.png')" ></x-image_comp>
                                <x-image_comp :text="__('JQuery')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/jquery.png')" ></x-image_comp>
                                <x-image_comp :text="__('MySql')" :width="__('40px')" :height="__('40px')"  :route="__('images/habilidades/mysql.png')" ></x-image_comp>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proyect_6" class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="p-2 hover_image_png border border-primary rounded">
                        <div class="row d-flex align-items-center">
                            <img src="{{asset('images/projects/lizzi.jpeg')}}" class=" my_img_thumbnail rounded-3" alt="EDer" style="max-width: 480px;">
                        </div>
                        <div class="row text-center py-2">
                            <h4><strong class="lizzi_color">Licy</strong></h4>
                        </div>
                        <div class="row py-1 align-items-center">
                            <h6 class="m-0">{{__('Proyecto de gestión y seguimiento de licitaciones públicas de la CFE. El sistema administraba actualizaciones de fechas de entrega y documentos necesarios para participar en licitaciones con IA.')}}</h6>
                        </div>
                        <div class=" row py-1">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <x-image_comp :class="__('me-1')" :text="__('Codeigniter')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/codeigniter.png')" ></x-image_comp>
                                <x-image_comp :text="__('Html')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                                <x-image_comp :text="__('Css')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/css.png')" ></x-image_comp>
                                <x-image_comp :class="__('me-1')" :text="__('JavaScript')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/js.png')" ></x-image_comp>
                                <x-image_comp :text="__('JQuery')" :width="__('40px')" :height="__('40px')" :route="__('images/habilidades/jquery.png')" ></x-image_comp>
                                <x-image_comp :text="__('MySql')" :width="__('40px')" :height="__('40px')"  :route="__('images/habilidades/mysql.png')" ></x-image_comp>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    HABILIDADES --}}
    <div id="habilidades" class="container mt-5">
        <div class="row pt-3">
            <div class="col-md-4 p-1">
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-start align-items-start">
                    <h1 class="strong"> {{'HABILIDADES'}}</h1>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" class="">Back-end</th>
                        <th scope="col" class="">Front-end</th>
                        <th scope="col" class="">Bases De Datos</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="">
                            <x-image_comp :text="__('Php')" :route="__('images/habilidades/php.png')" ></x-image_comp>
                            <x-image_comp :text="__('Laravel')" :route="__('images/habilidades/laravel.png')" ></x-image_comp>
                            <x-image_comp :text="__('Codeigniter')" :route="__('images/habilidades/codeigniter.png')" ></x-image_comp>
                            <x-image_comp :text="__('Livewire')" :route="__('images/habilidades/livewire.png')" ></x-image_comp>
                        </td>
                        <td class="">
                            <x-image_comp :text="__('Bootstrap')" :route="__('images/habilidades/bootstrap.png')" ></x-image_comp>
                            <x-image_comp :text="__('Tailwind')" :route="__('images/habilidades/tailwind.png')" ></x-image_comp>
                            <x-image_comp :text="__('Sass')" :route="__('images/habilidades/sass.png')" ></x-image_comp>
                            <x-image_comp :text="__('Css')" :route="__('images/habilidades/css.png')" ></x-image_comp>
                        </td>
                        <td class="">
                            <x-image_comp :text="__('MySql')" :route="__('images/habilidades/mysql.png')" ></x-image_comp>
                            <x-image_comp :text="__('Oracle')" :route="__('images/habilidades/oracle.png')" ></x-image_comp>
                            <x-image_comp :text="__('SqlServer')" :route="__('images/habilidades/sqlserver.png')" ></x-image_comp>
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            <x-image_comp :text="__('Node Js')" :route="__('images/habilidades/node_js.png')" ></x-image_comp>
                            <x-image_comp :text="__('Composer')" :route="__('images/habilidades/composer.png')" ></x-image_comp>
                            <x-image_comp :text="__('Open AI Api')" :route="__('images/habilidades/open_ai.gif')" ></x-image_comp>
                            <x-image_comp :text="__('Git')" :route="__('images/habilidades/git.png')" ></x-image_comp>
                        </td>
                        <td class="">
                            <x-image_comp :text="__('Html')" :route="__('images/habilidades/html.png')" ></x-image_comp>
                            <x-image_comp :text="__('JavaScript')" :route="__('images/habilidades/js.png')" ></x-image_comp>
                            <x-image_comp :text="__('jQuery')" :route="__('images/habilidades/jquery.png')" ></x-image_comp>
                            <x-image_comp :text="__('Alpine Js')" :route="__('images/habilidades/alpine_js.png')" ></x-image_comp>
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            <x-image_comp :text="__('Asp.Net')" :route="__('images/habilidades/aspnet.png')" ></x-image_comp>
                        </td>
                        <td class="">
                            <x-image_comp :text="__('Vite')" :route="__('images/habilidades/vite.png')" ></x-image_comp>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--    SOBRE MI --}}
    <div id="about" class="container mt-5">
        <div class="row pt-3">
            <div class="col-md-4 p-1"></div>
            <div class="col-md-8">
                <div class="d-flex justify-content-start align-items-start">
                    <h1 class="strong"> {{'SOBRE MI'}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-5 text-center"><hr class="my_own_hr"></div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-start align-items-start mt-3 my_font_text">
                    <h4 class="m-0 d-none d-lg-block"><strong class="my_text_blue"> {{'¡Hola Soy Eder!'}}</strong> {{__(' Me encanta aprender por mi cuenta a través de aplicaciones educativas como Netacad (Cisco Networking Academy), SoloLearn y Duolingo, de vez en cuando me gusta escuchar charlas TED sobre cómo funciona el cerebro, atención plena y meditación. Me apasionan los retos y considero que no hay cosa que no se pueda lograr en el mundo de la tecnología, durante mi carrera como programador me he econtrado con cosas que jamás pense que lograría realizar pero todo es cuestion de compromiso y las ganas de querer hacerlo realidad.')}}</h4>
                    <h5 class="m-0 d-lg-none"> <strong class="my_text_blue"> {{'¡Hola Soy Eder!'}}</strong>{{__(' Me encanta aprender por mi cuenta a través de varias educativas como Netacad (Cisco Networking Academy), SoloLearn y Duolingo, de vez en cuando me gusta escuchar charlas TED sobre cómo funciona el cerebro, atención plena y meditación. Me apasionan los retos y considero que no hay cosa que no se pueda lograr en el mundo de la tecnología, durante mi carrera como programador me he econtrado con cosas que jamás pense que lograría realizar pero todo es cuestion de compromiso y las ganas de querer hacerlo realidad.')}}</h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3"></div>
                <div class="col-5 text-center"><hr class="my_own_hr"></div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>

    {{--    CONTACTO --}}
    <div id="contacto" class="container mt-4">
        <div class="row pt-3">
            <div class="col-md-4 p-1">
            </div>
            <div class="col-md-8 mb-4">
                <div class="d-flex justify-content-start align-items-start">
                    <h1 class="strong"> {{'CONTACTO'}}</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-6">
                    <form wire:submit="sent_email">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" wire:model.live="name" required>
                            <div class="text-danger">@error('name') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" wire:model.live="email" required>
                            <div class="text-danger">@error('email') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="4" wire:model.live="message" required></textarea>
                            <div class="text-danger">@error('message') {{ $message }} @enderror</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2">Enviar</button>
                            <h5><strong class="text-success"> {{$this->email_message}}</strong></h5>
                            <div wire:loading >
                                <img src="{{asset('images/spin.gif')}}" class="img-thumbnail my_img_thumbnail" height="30px" width="30px" alt="EDer" >
                                Procesando ...
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
