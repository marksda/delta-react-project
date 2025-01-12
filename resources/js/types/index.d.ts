export interface User {
  id: number;
  name: string;
  email: string;
  email_verified_at?: string;
  created_at: string;
  permissions: string[];
  roles: string[]
}

export interface Pasien {
  id: number;
  name: string;
  email: string;
  email_verified_at?: string;
  created_at: string;
  permissions: string[];
  roles: string[]
}

export interface JenisLayanan {
  id: number;
  nama: string;
  created_date: {
    value: string;
    formatted: string;
  };
}

export interface RuangLayanan {
  id: number;
  nama: string;
  created_date: {
    value: string;
    formatted: string;
  };
  jenis_layanan: JenisLayanan;
}

export type PaginatedData<T = any> = {
  data: T[];
  links: Record<string, string>
}

export type PageProps<
  T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
  auth: {
    user: User;
  };
  ziggy: Config & { location: string };
};

// export type PageProps<
//     T extends Record<string, unknown> = Record<string, unknown>,
// > = T & {
//     auth: {
//         user: User;
//     };
// };
