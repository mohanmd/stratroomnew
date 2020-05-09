import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { ActivitiesModalpopupPage } from './activities-modalpopup.page';

describe('ActivitiesModalpopupPage', () => {
  let component: ActivitiesModalpopupPage;
  let fixture: ComponentFixture<ActivitiesModalpopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ActivitiesModalpopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(ActivitiesModalpopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
