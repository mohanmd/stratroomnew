import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'login',
    pathMatch: 'full'
  },
  {
    path: 'login',
    loadChildren: () => import('./login/login.module').then( m => m.LoginPageModule)
  },  {
    path: 'dashboard',
    loadChildren: () => import('./dashboard/dashboard.module').then( m => m.DashboardPageModule)
  },
  {
    path: 'initiatives',
    loadChildren: () => import('./initiatives/initiatives.module').then( m => m.InitiativesPageModule)
  },
  {
    path: 'initiative-detail',
    loadChildren: () => import('./initiative-detail/initiative-detail.module').then( m => m.InitiativeDetailPageModule)
  },
  {
    path: 'initiative-budget',
    loadChildren: () => import('./initiative-budget/initiative-budget.module').then( m => m.InitiativeBudgetPageModule)
  },
  {
    path: 'intiative-modalpopup',
    loadChildren: () => import('./intiative-modalpopup/intiative-modalpopup.module').then( m => m.IntiativeModalpopupPageModule)
  },
  {
    path: 'meetings',
    loadChildren: () => import('./meetings/meetings/meetings.module').then( m => m.MeetingsPageModule)
  },
  {
    path: 'view',
    loadChildren: () => import('./meetings/view/view.module').then( m => m.ViewPageModule)
  },
  {
    path: 'notes',
    loadChildren: () => import('./meetings/notes/notes.module').then( m => m.NotesPageModule)
  },
  {
    path: 'meetingpopup',
    loadChildren: () => import('./meetingpopup/meetingpopup.module').then( m => m.MeetingpopupPageModule)
  },
  {
    path: 'meetingeditpopup',
    loadChildren: () => import('./meetingeditpopup/meetingeditpopup.module').then( m => m.MeetingeditpopupPageModule)
  }


];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
