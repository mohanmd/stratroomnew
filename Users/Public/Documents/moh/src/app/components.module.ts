import { NgModule } from '@angular/core';
import { RangecalendarComponent } from './component/rangecalendar/rangecalendar.component';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';
@NgModule({
    declarations:[RangecalendarComponent],
    exports:[RangecalendarComponent],
    imports: [
        IonicModule,
        CommonModule,
        FormsModule
       ]

})

export class ComponentsModule{}