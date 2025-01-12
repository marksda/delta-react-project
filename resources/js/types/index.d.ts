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
  no_rm: string;
  nama: string;
  gender: string;
  tgl_lahir: {value: string; formatted: string};
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

export interface Kunjungan {
  id: number;
  no_kunjungan: string;
  tanggal_masuk: {
    value: string;
    formatted: string;
  };
  tanggal_keluar: {
    value: string;
    formatted: string;
  };
  pasien: Pasien;
  jenis_layanan: JenisLayanan;
  ruang_layanan: RuangLayanan;
}

export interface Layanan {
  id: number;
  no_layanan: string;
  kunjungan: Kunjungan; 
  jenis_layanan: JenisLayanan;
  ruang_layanan: RuangLayanan;
  tanggal_mulai: {
    value: string;
    formatted: string;
  };
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
