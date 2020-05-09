import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-meetingpopup',
  templateUrl: './meetingpopup.page.html',
  styleUrls: ['./meetingpopup.page.scss'],
})
export class MeetingpopupPage implements OnInit {

  constructor( private modalControler: ModalController )  { }

  ngOnInit() {
  }

  dismiss() {
    // using the injected ModalController this page
    // can "dismiss" itself and optionally pass back data
    this.modalControler.dismiss({
      'dismissed': true
    });
  }
}
