import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { InitiativesPage } from './initiatives.page';

describe('InitiativesPage', () => {
  let component: InitiativesPage;
  let fixture: ComponentFixture<InitiativesPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InitiativesPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(InitiativesPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
