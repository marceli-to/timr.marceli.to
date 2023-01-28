export default {
  data: [
    {
      header: 'Track',
      items: [
        {
          icon: 'clock',
          label: 'Timer',
          route: 'timer'
        }
      ]
    },
    {
      header: 'Manage',
      items: [
        {
          icon: 'folder',
          label: 'Projects',
          route: 'projects'
        },
        {
          icon: 'user-group',
          label: 'Clients',
          route: 'clients'
        },
      ]
    },
    {
      header: 'Backoffice',
      items: [
        {
          icon: 'document',
          label: 'Invoices',
          route: 'invoices'
        },
        {
          icon: 'receipt',
          label: 'Expenses',
          route: 'expenses'
        }
      ]
    },
  ]
}