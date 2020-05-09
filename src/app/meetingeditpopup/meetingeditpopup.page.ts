import { Component, OnInit } from '@angular/core';
import { NavParams, ModalController } from '@ionic/angular';

@Component({
  selector: 'app-meetingeditpopup',
  templateUrl: './meetingeditpopup.page.html',
  styleUrls: ['./meetingeditpopup.page.scss'],
})
export class MeetingeditpopupPage implements OnInit {

  constructor(    
    public navParams: NavParams,
    public modalCtrl: ModalController) { }

  ngOnInit() {
  }

  public closeModal() {
    this.modalCtrl.dismiss({
      'dismissed': true
    });
  }
}
