import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';
import {Router} from '@angular/router';

@Component({
  selector: 'app-meetingpopup',
  templateUrl: './meetingpopup.page.html',
  styleUrls: ['./meetingpopup.page.scss'],
})
export class MeetingpopupPage implements OnInit {

  constructor( private modalControler: ModalController, public router: Router) { }

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
