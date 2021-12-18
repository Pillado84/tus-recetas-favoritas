import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { HttpClientModule } from '@angular/common/http';
import { HomeComponent } from './pages/home/home.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { LoginComponent } from './pages/login/login.component';
import { UserComponent } from './pages/user/user.component';
import { SignupComponent } from './pages/signup/signup.component';
import { RecetaComponent } from './components/receta/receta.component';
import { SearchComponent } from './pages/search/search.component';
import { SeeComponent } from './pages/see/see.component';
import { FilterComponent } from './components/filter/filter.component';
import { OffcanvasComponent } from './components/offcanvas/offcanvas.component';
import { AccordionComponent } from './components/accordion/accordion.component';
import { FooterComponent } from './components/footer/footer.component';
import { ProfileComponent } from './components/profile/profile.component';
import { InformationComponent } from './components/information/information.component';
import { PasswordComponent } from './components/password/password.component';
import { BlogComponent } from './components/blog/blog.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { AlertComponent } from './components/alert/alert.component';
import { NewRecipeComponent } from './components/new-recipe/new-recipe.component';
import { EditorModule } from '@tinymce/tinymce-angular';


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    NavbarComponent,
    LoginComponent,
    UserComponent,
    SignupComponent,
    RecetaComponent,
    SearchComponent,
    SeeComponent,
    FilterComponent,
    OffcanvasComponent,
    AccordionComponent,
    FooterComponent,
    ProfileComponent,
    InformationComponent,
    PasswordComponent,
    BlogComponent,
    AlertComponent,
    NewRecipeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    ReactiveFormsModule,
    FormsModule,
    EditorModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
