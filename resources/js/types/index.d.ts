export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at?: string;
}

export interface JenisLayanan {
  id: number;
  nama: string;
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

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
};
