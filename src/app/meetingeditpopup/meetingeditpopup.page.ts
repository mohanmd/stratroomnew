import { Component, OnInit } from '@angular/core';
import { NavParams, ModalController } from '@ionic/angular';
import { DatePicker } from '@ionic-native/date-picker/ngx';

@Component({
  selector: 'app-meetingeditpopup',
  templateUrl: './meetingeditpopup.page.html',
  styleUrls: ['./meetingeditpopup.page.scss'],
})
export class MeetingeditpopupPage implements OnInit {

  constructor(    
    public navParams: NavParams,
    public modalCtrl: ModalController,
    private datePicker: DatePicker) {
      
     }

  ngOnInit() {
  }

  public closeModal() {
    this.modalCtrl.dismiss({
      'dismissed': true
    });
  }
  showdatepicker()
  {
    this.datePicker.show({
      date: new Date(),
      mode: 'date',
      androidTheme: this.datePicker.ANDROID_THEMES.THEME_HOLO_DARK
    }).then(
      date => console.log('Got date: ', date),
      err => console.log('Error occurred while getting date: ', err)
    );
  }
}
