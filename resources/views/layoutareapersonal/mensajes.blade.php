@extends('master.layout')
@section('content')
  <div class="container-fluid">
      <h1 class="mt-4">Área Personal</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Área Personal/Mensajes</li>
      </ol>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="/home" ><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
            </li>
          <li class="nav-item active">
            <a class="nav-link" href="/notificaciones" ><i class="far fa-bell"></i> Notificaciones <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="/mensajes" ><i class="fas fa-envelope"></i> Mensajes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/propuestas" ><i class="far fa-edit"></i> Mis Propuestas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/asignados" ><i class="fas fa-clipboard-list"></i> Trabajos Asignados<span class="sr-only">(current)</span></a>
            </li>
          
        </ul>
      </div>
    </nav>
   
    <!--Messenger Inicio -->
      <div class="container">
      <div class="messaging">
            <div class="inbox_msg">
              <div class="inbox_people">
                <div class="headind_srch">
                  <div class="recent_heading">
                    <h4>Recientes</h4>
                  </div>
                  <div class="srch_bar">
                    <div class="stylish-input-group">
                      <input type="text" class="search-bar"  placeholder="Search" >
                      <span class="input-group-addon">
                      <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                      </span> </div>
                  </div>
                </div>
                <div class="inbox_chat">
                  <div class="chat_list active_chat">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                        <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                            quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                      </div>
                    </div>
                  </div>
                  <div class="chat_list">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                          <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                              quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                        </div>
                    </div>
                  </div>
                  <div class="chat_list">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                          <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                              quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                        </div>
                    </div>
                  </div>
                  <div class="chat_list">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                          <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                              quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                        </div>
                    </div>
                  </div>
                  <div class="chat_list">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                          <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                              quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                        </div>
                    </div>
                  </div>
                  <div class="chat_list">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                          <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                              quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                        </div>
                    </div>
                  </div>
                  <div class="chat_list">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                          <h5>Alumno <span class="chat_date">Dec 25</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique non maxime fuga animi sed nam repellendus 
                              quis adipisci maiores, praesentium consectetur velit nulla veniam labore laboriosam sapiente magni autem!</p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mesgs">
                <div class="msg_history">
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p>Hola, Me he interesado en el tema</p>
                        <span class="time_date"> 11:01 AM    |    June 9</span></div>
                    </div>
                  </div>
                  <div class="outgoing_msg">
                    <div class="sent_msg">
                      <p>Me podrias señalar cual?</p>
                      <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                  </div>
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p>Te envio la solicitud, a parte de esto podrias detallar un poco mas?</p>
                        <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                    </div>
                  </div>
                  <div class="outgoing_msg">
                    <div class="sent_msg">
                      <p>Si perfecto, el tema en si se basa en la creacion de una plataforma web 
                          para la universidad, para la gestion de trabajos finales</p>
                      <span class="time_date"> 11:01 AM    |    Today</span> </div>
                  </div>
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p>Excelente tema, ya envie la solicitacion para aprovacion, aguardo...</p>
                        <span class="time_date"> 11:01 AM    |    Today</span></div>
                    </div>
                  </div>
                </div>
                <div class="type_msg">
                  <div class="input_msg_write">
                    <input type="text" class="write_msg" placeholder="Escriba una mensaje" />
                    <button class="msg_send_btn" type="button"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
      </div>
@endsection
           