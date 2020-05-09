import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-meetingsview',
  templateUrl: './meetingsview.page.html',
  styleUrls: ['./meetingsview.page.scss'],
})
export class MeetingsviewPage implements OnInit {
  selectTabs = 'view';
  constructor() { }

  ngOnInit() {
  }

}
